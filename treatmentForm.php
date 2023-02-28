<html>
<head>
    <title>Treatment</title>
    <style>
    body {background-color: powderblue;}
    h1   {color: blue;}
    p    {color: red;}
</style>
</head>
<body>

<?php

// if(isset($_POST['submit'])){
//     $symptom1=$_POST['Symptom1'];
//     $symptom2=$_POST['Symptom2'];
//     $symptom3=$_POST['Symptom3'];
//     $symptom4=$_POST['Symptom4'];
//     $symptom5=$_POST['Symptom5'];

//     echo $symptom1;


    
//     $con=mysqli_connect("localhost","root","","BEEMED_DATABASE");

//     $result = mysqli_query($con, "SELECT * FROM SYMPTOM where SymptomName = '$symptom1' OR SymptomName = '$symptom2' OR SymptomName = '$symptom3' OR SymptomName = '$symptom4' OR SymptomName = '$symptom5' ");
    
//     echo "<table border='1'>
//     <tr>
//     <thID</th>
//     <th>Name</th>
//     <th>Description</th>
//     </tr>";
    
//     //$sym= mysqli_fetch_all($result);
//     //print_r($sym);


//     while($row = mysqli_fetch_array($result))
//     {
        

//         echo "<tr>";
//         //echo "<td>" . $row['SymptomID'] . "</td>";
//         echo "<td>" . $row['SymptomName'] . "</td>";
//         echo "<td>" . $row['SymptomDescription'] . "</td>";
//         echo "</tr>";

//         $name = $row['SymptomName'];
//         echo $name;


//         $result2 = mysqli_query($con, "SELECT medication.MedID,medication.MedDescription,medication.AveragePrice,medication.Administration, medication.PopularBrandName from medication 
//         join treatment on medication.TreatmentID = treatment.TreatmentID 
//         where treatment.TreatmentID in (select treats.TreatmentID from symptom 
//         join treats on symptom.SymptomID = treats.SymptomID where symptom.SymptomName ='$name')");

//         $med= mysqli_fetch_array($result2);
//         print_r($med);

//     }
// echo "</table>";









// }

//
if(isset($_POST['submit'])){
    $symptom1=$_POST['Symptom1'];
    $symptom2=$_POST['Symptom2'];
    $symptom3=$_POST['Symptom3'];
    $symptom4=$_POST['Symptom4'];
    $symptom5=$_POST['Symptom5'];

    //echo $symptom1;



    $con=mysqli_connect("localhost","root","","BEEMED_DATABASE");

    $result = mysqli_query($con, "SELECT * FROM SYMPTOM where SymptomName = '$symptom1' OR SymptomName = '$symptom2' OR SymptomName = '$symptom3' OR SymptomName = '$symptom4' OR SymptomName = '$symptom5' ");

    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    </tr>

    <tr>
    <th> </th>
    </tr>
    


    <tr>
    <th>
    Suggest Medication for your Symptom/s
    </th>
    </tr>
   
    <tr>

    <th>MName</th>
    <th>MDescription</th>
    <th>MPrice</th>
    <th>MAdmin</th>
    </tr>";

    //$sym= mysqli_fetch_all($result);
    //print_r($sym);


    while($row = mysqli_fetch_array($result))
    {


        echo "<tr>";
        //echo "<td>" . $row['SymptomID'] . "</td>";
        echo "<td>" . $row['SymptomName'] . "</td>";
        echo "<td>" . $row['SymptomDescription'] . "</td>";
        echo "</tr>";

        
        $name = $row['SymptomName'];
        //         echo $name;

        $result2 = mysqli_query($con, "SELECT medication.MedID,medication.MedDescription,medication.AveragePrice,medication.Administration, medication.PopularBrandName from medication 
        join treatment on medication.TreatmentID = treatment.TreatmentID 
        where treatment.TreatmentID in (select treats.TreatmentID from symptom 
        join treats on symptom.SymptomID = treats.SymptomID where symptom.SymptomName ='$name')");

        $med= mysqli_fetch_array($result2);
        //print_r($med);


         echo "<tr>";
        //echo "<td>" . $med['MID'] . "</td>";
        echo "<td>" . $med['PopularBrandName'] . "</td>";
        echo "<td>" . $med['MedDescription'] . "</td>";
        echo "<td>" . $med['AveragePrice'] . "</td>";
        echo "<td>" . $med['Administration'] . "</td>";
        echo "</tr>";

    }
echo "</table>";









}

?>

?>