<style>
<?php include 'results.css'; ?>
</style>
    <html>
        <form action="results.php" method="post">
            <input type="text" name="valueToSearch"><br><br>
            <input type="submit" name="search" value="Search"><br><br>
            
        </form>
        </html>


<?php
$connect = NEW MySQLi('localhost', 'root', '', 'insert');


/////// SORTING FUNCTION
if(isset($_GET['order'])){
    $order = $_GET['order'];
}else{
    $order = 'sign_up_date';
}

if(isset($_GET['sort'])){
    $sort = $_GET['sort'];
}else{
    $sort = 'ASC';
}

///// UNTIL HERE



if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM email WHERE CONCAT(`id`, `email`, `sign_up_date`) LIKE '%".$valueToSearch."%' ORDER BY $order $sort";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM email ORDER BY $order $sort" ;
    $search_result = filterTable($query);
}

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "insert");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}



///// OUTPUT
if($search_result->num_rows > 0){
    
    
    $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';

    echo"
    <table>
        <tr>
            <th>ID</th>
            <th><a href='?order=email&&sort=$sort'>Email</a></th>
            <th><a href='?order=sign_up_date&&sort=$sort'>Date</a></th>
    ";
///$rows = mysqli_query($connect, "SELECT * FROM email WHERE CONCAT(`id`, `email`, `sign_up_date`) LIKE '%".$valueToSearch."%' ORDER BY $order $sort"////
    while($rows = mysqli_fetch_array($search_result))
    {
        
            $id = $rows['id'];
            $emails = $rows['email'];
            $date = $rows['sign_up_date'];

        echo"
        <tr>
            <td>$id</td>
            <td>$emails</td>
            <td>$date</td>
        </tr>
        ";
    }

    echo"
    </table>
    ";
}
else{
    echo"No data registered";
}
?>





