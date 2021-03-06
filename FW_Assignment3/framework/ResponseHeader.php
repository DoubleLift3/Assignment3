<?php 
namespace Quwi\framework;

class ResponseHeader extends Response_Abstract{

    public function addEntries(array $entries): bool{
        if(!empty($entries)){
            $responseEntries[]= $entries;
            return true;
        }
        return false;

    }

    public function showEntries(int $start, int $end) : string {
        return '';
    }

    public function showEntry(int $i): string {
        return '';
    }
}

