<?php
class Model
{
    protected $table;
    protected $db;
    public function __construct($db, $table)
    {
        $this->db = $db;
        $this->table = $table;
    }
    public function save($data)
    {
        try {
            if (isset($data['id'])) {
                $columns = array_keys($data);
                $sets = [];
                $i = 0;
                foreach ($columns as $column) {
                    $sets[$i] = "$column = :$column";
                    $i++;
                }
                $setString = implode(', ', $sets);

                $sql = "UPDATE $this->table SET $setString WHERE id = :id";
            } else {

                $columns = implode(', ', array_keys($data));
                $placeholders = ':' . implode(', :', array_keys($data));
                $sql = "INSERT INTO $this->table ($columns) VALUES ($placeholders)";
            }
            $stmt = $this->db->prepare($sql);
            $stmt->execute($data);
        } catch (PDOException $e) {
            die("Error saving data: " . $e->getMessage());
        }
    }

    public function find($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
    public function create($data)
    {
        try {
            $columns = implode(', ', array_keys($data));
            $placeholders = ':' . implode(', :', array_keys($data));
            $sql = "INSERT INTO $this->table ($columns) VALUES ($placeholders)";

            $stmt = $this->db->prepare($sql);
            $stmt->execute($data);
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            die("Error creating data: " . $e->getMessage());
        }
    }
    public function update($id, $data)
    {
        try {
            $data['id'] = $id;
            $columns = array_keys($data);
            $sets = [];
            $i = 0;
            foreach ($columns as $column) {
                $sets[$i] = "$column = :$column";
                $i++;
            }
            $setString = implode(', ', $sets);

            $sql = "UPDATE $this->table SET $setString WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $stmt->execute($data);
        } catch (PDOException $e) {
            die("Error updating data: " . $e->getMessage());
        }
    }
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->execute(['id' => $id]);
        } catch (PDOException $e) {
            die("Error deleting data: " . $e->getMessage());
        }
    }
}
?>