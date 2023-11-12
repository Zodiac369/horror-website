<div class="container mx-auto text-center">
    <ul class="flex justify-center">
        <li class="flex items-center">
            <?php
            $coverCode = $movie->cover;
            $coverURL = "https://image.tmdb.org/t/p/w500/" . $coverCode;
            ?>
            <a href="movie.php?id=<?= $movie->movieId ?>">
                <img src="<?= $coverURL ?>" alt="Cover de <?= $movie->name ?>" class="mr-32 mb-24 w-64 h-74">
            </a>
            <div class="ml-4 text-center mr-64 mb-24">
                <p class="text-xl font-bold">
                    <a href="movie.php?id=<?= $movie->movieId ?>">
                        <?= $movie->name ?>
                    </a>
                </p>
                <br>
                <p class="text-m font-semibold text-blue-700 underline">
                    <a href="director.php?id=<?= $movie->directorId ?>">
                        <?= $movie->directorName ?>
                    </a>
                </p>
                <p class="text-sm">Année de sortie : <?= $movie->date ?></p>
                <p class="text-sm w-64 h-22 mt-4 overflow-hidden font-semibold"> <?= $movie->synopsis ?></p>
            </div>
        </li>
    </ul>
</div>
