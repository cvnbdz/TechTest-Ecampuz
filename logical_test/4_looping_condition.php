<?php
for ($i = 1; $i <= 50; $i++) {
  $hasil = '';

  if ($i % 3 === 0 && $i % 5 === 0) {
    $hasil = 'FooBar';
  } elseif ($i % 3 === 0) {
    $hasil = 'Foo';
  } elseif ($i % 5 === 0) {
    $hasil = 'Bar';
  } else {
    $hasil = $i;
  }

  echo "$hasil<br>";
}
