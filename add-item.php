<?php $title="Add Item"; ?>
<?php include('header.php'); ?>
<div id="content">
<div class="page section">
    <h1>Add Item</h1>
    <?php
    if(isset($_POST['add'])){
        $pid=$_POST["pid"];
        $name=$_POST['name'];
        $price=$_POST['price'];
        include("connection-db.php");
        $query="INSERT INTO stuff(id,name,price) VALUES ($pid, '$name',$price)";
        $result= mysqli_query($con,$query);
        header("Location:additem.php?s=$result");
        mysqli_close();
        exit();}
    if($result)
    echo "<p>Item added successfully to the Database</p>";
else
echo "<p>Sorry Item was not  added</p>";
        ?>
    
    <p>Item added successfully to the Database</p>
    
    
    <p>Sorry Item was not added</p>
    <?php }
    if(!isset($_POST['add'])){?>
    <from id="contact" name="add" method="POST" action="add-item.php">
       <table>
        <tr>
            <th>
                <label for="pid" >Product-ID*</able>
            <input type="submit" value="add" name="add" id="add"/>
    </from><?php}?>
    
    
                <form id="contact" name="add" method="POST" action="add-item.php">
                    <table>
                        <tr>
                            <th>
                                <label for="pid">Product-ID*</label>
                            </th>
                            <td>
                                <input type="text" name="pid" id="pid">
                                
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="name">Product Name*</label>
                            </th>
                            <td>
                                <input type="text" name="name" id="name">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="image">Upload Image</label>
                            </th>
                            <td>
                                <input type="file" name="image" id="image">
                                <span style="font-size: 0.6em; font-style: italic;">(Maximum 500 KB)</span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="price">Price*</label>
                            </th>
                            <td>
                                <input type="text" name="price" id="price">
                                
                            </td>
                        </tr>                    
                    </table>
                    <input type="submit" value="Add" name="add" id="add"/>

                </form>
    </div>
</div>
<?php include 'footer.php'; ?>