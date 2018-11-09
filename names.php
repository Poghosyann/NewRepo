<?

$names = [
    'John', 'Jane', 'Jim', 'David'
];
if(isset($_POST['name'])){
    if(in_array($_POST['name'], $names)){
        echo 1;
    }
    else{
        echo 0;
    }
}


