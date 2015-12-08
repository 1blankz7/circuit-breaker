<?php
namespace itsoneiota\circuitbreaker\random;

/**
 * Simple wrapper for rand();
 */
class Rand implements RandomNumberGenerator {

    public function rand($min,$max){
        return mt_rand($min,$max);
    }

}
