<?php
	namespace App\Core;

	use \PDO;

	abstract class Model {

		private $dbc;

		final public function __construct(DbConnection &$dbc){ //da ne bi stalno uspostavljao konekciju iznova, mozemo da pozovemo $dbc varijablu po referenci. &$dbc
			$this->dbc = $dbc;
		}

		protected function getFields(): array {
			return [];
		}

		final protected function getConnection(){

			return $this->dbc->getConnection();
		}

		# UserProfile
		# _User_Profile
		# _user_profile
		# user_profile

		final private function getTableName(): string {
		
		# static::class =  'App\Models\UserProfileModel'
			$matches = [];
			preg_match('|^.*\\\((?:[A-Z][a-z]+)+)Model$|', static::class, $matches);
         # $matches = 'UserProfile'
			 return substr(strtolower(preg_replace('|[A-Z]|','_$0', $matches[1] ?? '')), 1);
		# returns 'user_profile'

		}


		final public function getById(int $id){

			$tableName = $this->getTableName();
			$sql = 'SELECT * FROM '. $tableName .' WHERE ' . $tableName .'_id = ?';
			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([ $id ]);
			$item = NULL;
			if($res){
				$item = $prep->fetch(PDO::FETCH_OBJ);
			}

			return $item;

		}

		final public function getByIdFromUserTable(string $username, int $id){

			$tableName = strtolower($username) . '_knjige';
			$sql = 'SELECT * FROM '. $tableName .' WHERE knjige_id = ?';
			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([ $id ]);
			$item = NULL;
			if($res){
				$item = $prep->fetch(PDO::FETCH_OBJ);
			}

			return $item;

		}

		final public function getAll(): array{

			$tableName = $this->getTableName();
			$sql = 'SELECT * FROM ' . $tableName .'';
			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute();
			$items = [];
			if($res){

				$items = $prep->fetchall(PDO::FETCH_OBJ);
			}

			return $items;
		}

		final public function getAllFromUserTable($username): array{

			$tableName = strtolower($username) . '_knjige';
			$sql = 'SELECT * FROM ' . $tableName;
			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute();
			$items = [];
			if($res){

				$items = $prep->fetchall(PDO::FETCH_OBJ);
			}

			return $items;
		}

		final private function isFieldValueValid(string $fieldName, string $fieldValue): bool {

			//ovo je spisak svih podrzanih fildova
			$fields = $this->getFields();
			$supportedFieldNames = array_keys($fields);

			if(!in_array($fieldName, $supportedFieldNames)){
				return false;
			}

			return $fields[$fieldName] . $fieldValue;

		}	

		final public function getByFieldName(string $fieldName, $value){

			if(!$this->isFieldValueValid($fieldName, $value)){
				throw new \Exception('Invalid field name or value: ' . $fieldName);
			}

			$tableName = $this->getTableName();
			$sql = 'SELECT * FROM '. $tableName .' WHERE ' . $fieldName .' = ?';
			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([ $value ]);
			$item = NULL;
			if($res){
				$item = $prep->fetch(PDO::FETCH_OBJ);
			}

			return $item;

		}

		final public function getAllByFieldName(string $fieldName, $value): array {

			if(!$this->isFieldValueValid($fieldName, $value))
			 {
				throw new \Exception('Invalid field name: ' . $fieldName);
			}

			$tableName = $this->getTableName();	
			$sql = 'SELECT * FROM '. $tableName .' WHERE ' . $fieldName .' = ?';
			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([ $value ]);
			$items = [];
			if($res){
				$items = $prep->fetchAll(PDO::FETCH_OBJ);
			}

			return $items;

		}





		final public function add(array $data) {


		//$this->checkFieldList($data);//ovo su korak #1 i #2

		# 3. priprema INSERT INTO ... SQL izraza
		# 4. izvrsavane pripremljenog izraza

		$tableName = $this->getTableName();

		$sqlFieldNames = implode(', ', array_keys($data));
		$questionMarks = str_repeat('?,', count($data));
		$questionMarks = substr($questionMarks,0, -1);

		$sql = "INSERT INTO {$tableName} ({$sqlFieldNames}) VALUES ({$questionMarks})";

		$prep = $this->dbc->getConnection()->prepare($sql);
		$res = $prep->execute(array_values($data));
				
		if(!$res) {
			return false;
		}

		return $this->dbc->getConnection()->lastInsertId();
				
	}

	
	final public function deleteById(int $id){

			$tableName = $this->getTableName();
			$sql = 'DELETE FROM '. $tableName .' WHERE ' . $tableName .'_id = ?';
			$prep = $this->dbc->getConnection()->prepare($sql);
			return  $prep->execute([ $id ]);
			
		}

		final public function createUserTable(string $username){

			
			$sql = 'CREATE TABLE '  . strtolower($username) . '_knjige 
			( 
			    knjige_id  INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
				autor VARCHAR(255),
				naslov VARCHAR(255),
				zanr VARCHAR(255),
				citat text,
				slika VARCHAR(255),
				korisnicko_ime VARCHAR(255),
				komentar text,
				status VARCHAR(255),
				FOREIGN KEY (korisnicko_ime) REFERENCES korisnici(korisnicko_ime)			
			)ENGINE=InnoDb';

			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([ $username ]);
		
		}

		final public function insertIntoUserTable(string $username, array $data){

			
				# 3. priprema INSERT INTO ... SQL izraza
				# 4. izvrsavane pripremljenog izraza
		
				$tableName = strtolower($username) . '_knjige';
		
				$sqlFieldNames = implode(', ', array_keys($data));
				$questionMarks = str_repeat('?,', count($data));
				$questionMarks = substr($questionMarks,0, -1);
		
				$sql = "INSERT INTO {$tableName} ({$sqlFieldNames}) VALUES ({$questionMarks})";
		
				$prep = $this->dbc->getConnection()->prepare($sql);
				$res = $prep->execute(array_values($data));
						
				if(!$res) {
					return false;
				}
		
				return $this->dbc->getConnection()->lastInsertId();
						
			}

			final public function editKnjige(string $username, int $id, array $fields){

				$tableName = strtolower($username) . '_knjige';

				$fieldString = '';
				$values = [];

				foreach($fields as $field => $value){
					$fieldString .= ' ' . $field . ' = ?,';
					$values[] = $value;
				}

				$fieldString = trim($fieldString);
				$fieldString = rtrim($fieldString, ',');

				$sql = "UPDATE {$tableName} SET {$fieldString} WHERE knjige_id = '$id'";
	
				$prep = $this->dbc->getConnection()->prepare($sql);
				$res = $prep->execute(array_values($fields));
		


			}

			public function mainSearch($keyword, $username){

				
			$tableName = $username . '_' . $this->getTableName();	

			$sql = "SELECT * FROM  {$tableName} WHERE autor
			LIKE ? OR naslov LIKE ? OR zanr LIKE ? OR status LIKE ?";

			$keyword = '%' . $keyword . '%';
			
			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([ $keyword, $keyword, $keyword, $keyword ]);
			$items = [];
			if($res){
				$items = $prep->fetchAll(PDO::FETCH_OBJ);
			}

			return $items;
		

		}

		public function deleteBook($username, $id) {

		$tableName = $username . '_' . $this->getTableName();	
		
		$sql = "DELETE FROM {$tableName} WHERE knjige_id = ?";

		$prep = $this->dbc->getConnection()->prepare($sql);
		$res = $prep->execute([ $id ]);


		}

	
	}

