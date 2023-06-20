<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Assignment </title>
    <link rel="stylesheet" href="CSs/bootstrap.min.css">
    <!-- main template for css -->
    <link rel="stylesheet" href="Css/style.css">
    <!-- render all elements normally -->
    <link rel="stylesheet" href="Css/normalize.css">
    <!-- font awesome library -->
    <link rel="stylesheet" href="Css/all.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro:wght@400;500;600;700;800&family=Crete+Round&family=Montserrat:wght@300&family=Open+Sans:wght@700&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,700&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <h1 class="text-center">The Second Assignment </h1>
    <div class="accordion p-4 " id="accordionPanelsStayOpenExample">
        <!-- The First Question -->
        <div class="accordion-item shadow bg-body-tertiary my-3">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Question 1:
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">

                    <?php
                    function evenNumber($numbers)
                    {
                        $arrayOfEvenNumber = [];
                        foreach ($numbers as $number) {
                            if ($number % 2 == 0) {
                                array_push($arrayOfEvenNumber, $number);
                            }
                        }
                        return $arrayOfEvenNumber;
                    }
                    echo '<pre>';
                    print_r(evenNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));
                    ?>
                </div>
            </div>
        </div>

        <!-- The Second Question -->
        <div class="accordion-item shadow bg-body-tertiary my-3">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Question 2:
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <?php
                    function theLongestStringWithIndex($StringArray, &$longestIndex)
                    {
                        $longestString = '';
                        $longestIndex = -1;
                        foreach ($StringArray as $index => $string) {
                            if (strlen($string) > strlen($longestString)) {
                                $longestString = $string;
                                $longestIndex = $index;
                            }
                        }
                        return $longestString;
                    }

                    $index = 5;//any value passed in index variable well signed by reference with $longestIndex argument in the function so any change in the argument cause a change in the $index variable
                    $longest = theLongestStringWithIndex(['Heba', 'Mahghger', 'Fatema'], $index);
                    echo "The longest string in the string array is : $longest with index $index";


                    ?>
                </div>
            </div>
        </div>

        <!-- The Third Question -->
        <div class="accordion-item shadow bg-body-tertiary my-3">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Question 3:
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <?php
                    function multiplyTwoArray($array1 , $array2)
                    {
                        $multiplyedArray = [];
                        if(count($array1) == count($array2)){
                            for($i = 0 ; $i < count($array1) ; $i++){
                                $result = $array1[$i] * $array2[$i];
                                array_push($multiplyedArray , $result );
                            }
                            return $multiplyedArray;
                        }
                    }
                    echo '<pre>';
                    print_r( multiplyTwoArray([1,2,3] , [3,4,1]));

                    ?>
                </div>
            </div>
        </div>

        <!-- The Fourth Question -->
        <div class="accordion-item shadow bg-body-tertiary my-3">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Question 4:
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <?php
                    function factorial($num)
                    {
                        if ($num === 0 || $num === 1) {
                            return 1;
                        } else {
                            return $num * factorial($num - 1);
                        }
                    }
                    
                    echo factorial(3);

                    ?>
                </div>
            </div>
        </div>

        <!-- The Fourth Question -->
        <div class="accordion-item shadow bg-body-tertiary my-3">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Question 5:
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                <?php
                    function isPrimeNumber($num)
                    {
                        if ($num < 2) {
                            return 'false';
                        }
                        for ($i = 2; $i < $num; $i++) {
                            if ($num % $i === 0) {
                                return "the number $num is not a prime";
                            }
                        }
                        return "Yes , the number $num is a prime";
                    }
                    
                    echo isPrimeNumber(8); 
                    
                    ?>
                </div>
            </div>
        </div>

     


        <script src="Javascript/bootstrap.bundle.min.js"></script>
</body>

</html>