------------------------------ BINBIN GENERATOR IN PHP ------------------------------

1. You can Copy the code Below to use it anywhere:
2. The functions has two parameters:
   1. num - The amount of words you want the code to generate.
   2. sufix - The amount of suffixes you want each word to have.

3. Or you can use my website to generate the words! <a href="https://bingenerator.surge.sh/" target="_blank">Binbin Generator</a>

```bash
function binbCreator($num=5,$sufix=3){
    $consonants = array('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z');
    $vowels = array('a','e','i','o','u');
    $binResult=array();
    for($cont=1;$cont<=$num;$cont++){
        $binWord = 'binb'.$vowels[array_rand($vowels)];
        while(strlen($binWord)<=$sufix+3){
            $binWord.= (rand(0,1) ? $consonants[array_rand($consonants)] : $vowels[array_rand($vowels)]);
        }
        array_push($binResult,$binWord);
    }
    return $binResult;
}
```
