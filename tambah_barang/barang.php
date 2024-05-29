<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "voidcoffe";

// Class untuk koneksi ke database
class Database
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    // Constructor
    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        // Membuat koneksi
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Check koneksi
        if ($this->connection->connect_error) {
            die("Koneksi gagal: " . $this->connection->connect_error);
        }
    }

    // Method untuk menambah barang
    public function tambahBarang($name, $description, $price)
    {
        $name = $this->connection->real_escape_string($name);
        $description = $this->connection->real_escape_string($description);
        $price = $this->connection->real_escape_string($price);

        $query = "INSERT INTO barang (nama_barang, deskripsi, harga) VALUES ('$name', '$description', '$price')";
        $result = $this->connection->query($query);

        if ($result === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Method untuk mendapatkan daftar barang
    public function getBarang()
    {
        $query = "SELECT * FROM barang";
        $result = $this->connection->query($query);
        $barang = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $barang[] = $row;
            }
        }

        return $barang;
    }

    // Method untuk menghapus barang berdasarkan ID
    public function hapusBarang($id)
    {
        $query = "DELETE FROM barang WHERE id = '$id'";
        $result = $this->connection->query($query);

        if ($result === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Method untuk mengupdate barang
    public function updateBarang($id, $name, $description, $price)
    {
        $name = $this->connection->real_escape_string($name);
        $description = $this->connection->real_escape_string($description);
        $price = $this->connection->real_escape_string($price);

        $query = "UPDATE barang SET nama_barang='$name', deskripsi='$description', harga='$price' WHERE id='$id'";
        $result = $this->connection->query($query);

        if ($result === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}

// Membuat objek dari class Database
$db = new Database($host, $username, $password, $database);

// Proses Tambah Barang
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tambah_barang"])) {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];

    if ($db->tambahBarang($name, $description, $price)) {
        // Redirect atau tampilkan pesan sukses
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit();
    } else {
        // Tampilkan pesan error
        echo "Gagal menambahkan barang.";
    }
}

// Proses Hapus Barang
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["hapus_barang"])) {
    $id = $_GET["id"];

    if ($db->hapusBarang($id)) {
        // Redirect atau tampilkan pesan sukses
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit();
    } else {
        // Tampilkan pesan error
        echo "Gagal menghapus barang.";
    }
}

// Proses Edit Barang
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit_barang"])) {
    $id = $_POST["id"];
    $name = $_POST["nama_barang"];
    $description = $_POST["deskripsi"];
    $price = $_POST["harga"];

    if ($db->updateBarang($id, $name, $description, $price)) {
        // Redirect atau tampilkan pesan sukses
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit();
    } else {
        // Tampilkan pesan error
        echo "Gagal mengupdate barang.";
    }
}

// Mendapatkan daftar barang
$barang = $db->getBarang();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-2 bg-light">
                <div class="text-center py-4">
                    <img src="woman1.png" class="w-50 mt-3" alt="">
                </div>
                <div class="font-weight-bold text-center mb-3 text-success">VOIDCOFFE</div>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/DaftarAdmin"><i class="fas fa-user-shield mr-2"></i>Data Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/DataCustomer"><i class="fas fa-users mr-2"></i>Data Customer</a></li>
                    <li class="nav-item"><a class="nav-link" href="barang.php"><i class="fa-solid fa-boxes-stacked mr-2"></i>Data Barang</a></li>
                </ul>
            </div>
            <!-- Main content -->
            <div class="col-10">
                <!-- Navbar -->
                <nav>
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                    <div class="container-fluid">
                        <!-- Navbar content -->
                    </div>
                    <div class="dropdown ml-auto">
                        <!-- Dropdown content -->
                    </div>
                </nav>
                <!-- Content area -->
                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success mb-3" data-toggle="modal" data-target="#myModal">+ Tambah Barang</button>
                            <input class="form-control mb-3" type="search" placeholder="Cari Barang">
                        </div>
                    </div>
                    <!-- Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($barang as $item): ?>
                                <tr>
                                    <td><?php echo $item["nama_barang"]; ?></td>
                                    <td><?php echo $item["deskripsi"]; ?></td>
                                    <td><?php echo $item["harga"]; ?></td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#editModal_<?php echo $item['id']; ?>">Edit</button>

                                        <div class="modal fade" id="editModal_<?php echo $item['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel_<?php echo $item['id']; ?>" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel_<?php echo $item['id']; ?>">Edit Barang</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" name="id" value="<?php echo $item["id"]; ?>">
                                                            <input type="text" name="nama_barang" value="<?php echo $item["nama_barang"]; ?>" placeholder="Nama Barang" required class="form-control mb-3">
                                                            <input type="text" name="deskripsi" value="<?php echo $item["deskripsi"]; ?>" placeholder="Deskripsi" required class="form-control mb-3">
                                                            <input type="number" name="harga" value="<?php echo $item["harga"]; ?>" placeholder="Harga" required class="form-control mb-3">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" name="edit_barang" class="btn btn-primary">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="<?php echo $_SERVER["PHP_SELF"]; ?>?hapus_barang=true&id=<?php echo $item["id"]; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Barang -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Tambah Barang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="name" placeholder="Nama Barang" required class="form-control mb-3">
                        <input type="text" name="description" placeholder="Deskripsi" required class="form-control mb-3">
                        <input type="number" name="price" placeholder="Harga" required class="form-control mb-3">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" name="tambah_barang" class="btn btn-primary">Tambah Barang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>