<?php
include "db.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql=$conn->prepare('select * from Products where id=?');
    $sql->bind_param('i',$id);
    $sql->execute();
    $user=$sql->get_result()->fetch_assoc();
}
if($_SERVER['REQUEST_METHOD']==='POST'){
    $id=$_POST['id'];
    $name=$_POST['pname'];
    $price=$_POST['pprice'];
    $category=$_POST['pcategory'];
    $quantity=$_POST['pquantity'];
    $sname=$_POST['sname'];



    $sql=$conn->prepare('update products set pname=?,pprice=?,pcategory=?,pquantity=?,sname=? where id=?');
    $sql->bind_param('sdsisi', $name, $price, $category, $quantity,$sname, $id);
    if($sql->execute()){
    header("Location: update.php?id=$id");
    exit;
}
}
?>
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <h2 class="text-center">Edit Products</h2>
            <div
                class="container col-5 border rounded shadow"
            >

            <div
                class="container"
            >
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Product ID</label>
                        <input
                            type="text"
                            class="form-control"
                            name="id"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?php echo$user['id']; ?>"
                        />
                    <div class="mb-3">
                        <label for="" class="form-label">Product name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="pname"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?php echo $user['pname']; ?>"
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Product price</label>
                        <input
                            type="text"
                            class="form-control"
                            name="pprice"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?php echo $user['pprice']; ?>"
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Product category</label>
                        <input
                            type="text"
                            class="form-control"
                            name="pcategory"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?php echo $user['pcategory']; ?>"
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Product quantity</label>
                        <input
                            type="text"
                            class="form-control"
                            name="pquantity"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?php echo $user['pquantity']; ?>"
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Supplier name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="sname"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?php echo $user['sname']; ?>"
                        />
                        
                    </div>
                    <form action="dashborad.php">
                        <div class="text-center">
                        
                    <button
                        type="submit"
                        class="btn btn-primary"
                        href=""
                    >
                        UPDATE
                    </button>
                    
                    <a
                        name=""
                        id=""
                        class="btn btn-primary"
                        href="dashborad.php"
                        role="button"
                        >Home</a
                    >
                    
                    </div>
                    </form>
                    

                    
                </form>
            </div>
            
                
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
