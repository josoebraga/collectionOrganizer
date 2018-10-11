<?php

#http://localhost/collectionorganizer/testeArquivo.php



for($i = 22;$i<101;$i++){
$k = (($i * 1000) + 1);
$j = (($i * 1000)+ 1000);
#echo '<pre>';
#echo
$dadosArqJava = "package descobrindonumerosprimos;

import java.util.TreeMap;

/**
 *
 * @author josoe.braga
 */
public class T$i extends Thread {

    int nome;
    TreeMap<Integer, Integer> lista = new TreeMap<>();

    public T$i() {
    }

    public T$i(int nome) {
        this.nome = nome;
    }

    private static boolean validaPrimo(int vlr) {
        for (int j = 2; j < vlr; j++) {
            if (vlr % j == 0) {
                return false;
            }
        }
        return true;
    }

    public void descobreNumerosPrimos() {

        for (int i = $k; i < $j; i++) {
            if (this.validaPrimo(i)) {
                if (i >= 2) {
                    this.lista.put(i, nome);
                }
            }
        }

    }

    public void retornaLista() {
        for (Integer chave : this.lista.keySet()) {
            Integer valor = this.lista.get(chave);
            System.out.println(\"Número: \" + chave
                    + \" Thread: \" + valor);
        }
    }

    @Override
    public void run() {
        this.descobreNumerosPrimos();
        this.retornaLista();
        yield();
    }

}
";

#echo '</pre>';

$dadosArqJava .= PHP_EOL;

$arqTemp = fopen("./txt/T$i.java", "a");
$escreve = fwrite($arqTemp, $dadosArqJava);
fclose($arqTemp);

}

?>