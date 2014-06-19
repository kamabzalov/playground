<?php

use CMS\Article;

$article = $entityManager->find(Article::class, 1234);
$article->setHeadLine("Hello");