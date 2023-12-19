<?php
require_once 'db_config.php';
class Database {
    private static $instance;
    private $connection;

    private function __construct() {
        try {
            $this->connection = new PDO("mysql:host=" . DB_HOST .";dbname=". DB_NAME, DB_USER, DB_PASS);
            // Set PDO attributes if needed
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            // Handle connection error appropriately
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}

// Get an instance of the Database class
$dbInstance = Database::getInstance();
$conn = $dbInstance->getConnection();
?>

