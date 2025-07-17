<?php
$sheet = getSheet(NODEPATH . variable('page_parameter1') . '/data/he-game-plan/dont-be-overwhelmed.tsv', false);
peDie('3', $sheet->rows);
