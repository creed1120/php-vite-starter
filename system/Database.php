<?php
/**
 * Class Database
 *
 * Provides methods for connecting to and interacting with a database.
 * Supports executing queries, fetching results, and managing connections.
 *
 * @package php-vite-starter\Database
 *
 * @property PDO $connection The PDO connection instance.
 *
 * @method void connect() Establishes a connection to the database.
 * @method mixed query(string $sql, array $params = []) Executes a SQL query with optional parameters.
 * @method array fetchAll(string $sql, array $params = []) Fetches all results from a query.
 * @method array|false fetch(string $sql, array $params = []) Fetches a single result from a query.
 * @method void close() Closes the database connection.
 */

class Database {

	// The PDO connection instance
	public $connection;
	public $statement;

	public function __construct($config, $user = 'root', $password = '')
	{
		// Connect to the Mysql database
		try {

			$dsn = 'mysql:' . http_build_query($config, '', ';');
			// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

			$options = [
				PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				PDO::ATTR_EMULATE_PREPARES   => false,
			];

			$this->connection = new PDO($dsn, $user, $password, $options);
			// echo "Database connection successful!";
		} catch (PDOException $e) {
			die("Database connection failed: " . $e->getMessage());
		}
	}

	// pass in the url query parameters when we execute the prapared statement
	public function query($query, $params = []) {

		// MYSQL prepared statment to execute SQL query
		$this->statement = $this->connection->prepare($query);
		$this->statement->execute($params);
		
		// make PDO dynamic by returning it and control the "fetch" method from the query
		return $this;
	}

	/**
	 * PDO class methods we now have access to on the Database class
	 * (we can now use the Database class as a PDO class)
	 *
	 * @return void
	 */
	public function find() {
		// Fetch a single row from the result set
		return $this->statement->fetch();
	}

	public function findOrFail() {
		$result = $this->find();
		// If no result is found, throw an exception or handle the error
		if (!$result) {
			abort();
		}
		// Otherwise, return the result
		return $result;
	}

	public function getAll() {
		// Fetch ALL single row from the result set
		return $this->statement->fetchAll();
	}
}