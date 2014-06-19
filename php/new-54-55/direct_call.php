<?php

echo (new DateTime())->add(new DateInterval('P3D'))->format('Y-m-d');