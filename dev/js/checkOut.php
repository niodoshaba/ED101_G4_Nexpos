<?php
 
try{ 
    // require_once("ordCon.php");
    // $dsn = "mysql:host=localhost;post=3306;dbname=g4_nexpos;charset=utf8";
    // $user = "root";
    // $password = "1u3ru894jo4SPUR";
    // $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    // $pdo = new PDO($dsn, $user, $password, $options);
    

    // require_once("generalConnectDB.php");
    require_once("ordCon.php");

    //搜尋紅利規則
    $bonusRule_sql = "SELECT BONUS_NAME 
                      FROM bonus_rule;";

    $bonusRule = $pdo->query($bonusRule_sql);
    $bonusRuleArr = array();
    while($pdoRow = $bonusRule->fetch(PDO::FETCH_ASSOC)){
        $bonusRuleArr[] = $pdoRow;
    }
    $sendBackbonusRule = array_pop($bonusRuleArr[0]); 
    
    print_r($sendBackbonusRule);

    



    }catch (PDOException $e){
        echo $e->getMessage();

    }

?>
