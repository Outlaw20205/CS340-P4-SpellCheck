<!DOCTYPE html>
<html>
    <body>
        <?php 
            function spellCheck($input, $comparedWord) {
                $costFound = 0;

                

                return $costFound;
            }
            
            $checked = array($cost => $wordDict);

            $dictionary = fopen("dictionary.txt", "r");

            while(!feof($dictionary)) {
                $wordCheck = $_POST["input"];
                $curWord; // = wordFromDict

                $costToCheck = spellCheck($wordCheck, $curWord);

                if (count($checked) == 10) {
                    //check remove add
                }
                
            }

            fclose($dictionary);

            $output = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10");
            sort($output);

            echo "Best matches were: <br>";
            foreach($output as $x) {
                echo "$x <br>";
            }
        ?>

    </body>
</html>