<?php 

    $cotacao = 5.14;
    $real = 1000;

    //conversao
    $dolar = $real / $cotacao;

    //formatação de moedas com internacionalização
    //bliblioteca intl (internalization)
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");

?>