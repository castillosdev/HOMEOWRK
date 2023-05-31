<?php 

$books = [
    [
        'title' => 'PHP 5 Power Programming',
        'author' => 'Andi Gutmans, Stig Bakken, Derick Rethans',
        'pubYear' => 2004,
        'purchaseUrl' => 'http://www.amazon.com/PHP-Power-Programming-Andi-Gutmans/dp/013147149X'
    ],
    [
        'title' => 'PHP Cookbook, 2nd Edition',
        'author' => 'David Sklar, Adam Trachtenberg',
        'pubYear' => 2006,
        'purchaseUrl' => 'http://www.amazon.com/PHP-Cookbook-2nd-David-Sklar/dp/0596101015'
    ],
    [
        'title' => 'Mastering Regular Expressions, 3rd Edition',
        'author' => 'Jeffrey E. F. Friedl',
        'pubYear' => 2006,
        'purchaseUrl' => 'http://www.amazon.com/Mastering-Regular-Expressions-Jeffrey-Friedl/dp/0596528124'
    ],
    ];

        function filter($items, $fn, ) {
            $filtered = [];
            foreach ($items as $item) {
                if ($fn($item)) {
                    $filtered[] = $item;
                }
            }
            return $filtered;
        }

        $filteredBooks = array_filter($books, function ($book) {
            return $book['pubYear'] < 2010 && $book['pubYear'] > 2004;
        });
?>

<ul>
    <?php foreach ($filteredBooks as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['title'] ?> (<?= $book['pubYear'] ?>)
            </a>
            by <?= $book['author'] ?>
        </li>
    <?php endforeach; ?>
</ul>