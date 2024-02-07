<!DOCTYPE html>
<html lang="en">
<head>
 <title>Demo</title>   
</head>
<body>
    

    <?php 
        $books = [
            [
                'name' =>'Do Andorids Dream Electric',
                'author' => 'Pilip',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ] ,
            [
                'name' =>'Do Andorids Dream Electric',
                'author' => 'Andy Weir',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ] ,
            [
                'name' =>'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ] ,
        ];

        function filterByAuthor($book){
            $filteredBooks =[];

             foreach ($books as $book) {}
                if ($book['author'] ==='Andy Weir'){
                    $filteredBooks[] = $book;
                }

        
        }

        ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'Andy Weir' )as $book) :?>
        <?php if ($book['author'] === 'Andy Weir') :?>
        <li>
            <a href = "<?= $book['purchaseUrl'] ?>">
                <?= $book['name'];?> (<?= $book['releaseYear']?>) -By <?=$book ['author'] ?>
            </a>
        </li>
        <?php endif ; ?> 
        <?php endforeach ; ?>

        <p>
           <?= filterByAuthor($book) ?> 
        </p>    

    </body>
</html>
