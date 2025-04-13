<?php 
namespace App\Filters;

use Illuminate\Http\Request;

class BaseFilter{

    protected $safeParams = [];
    protected $columnMap = [];
    
    protected $operatorMap = [
        'eq' => '=',
        'neq' => '!=',
        'like' => 'LIKE',
        'nlike' => 'not LIKE',
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '<=',
    ];

    public function transform(Request $request){
        $paramArray = [];

        foreach($this->safeParams as $parm => $operators){


            $query = $request->query($parm);
            if(!($query)){
                continue;
            }

            $column = $this->columnMap[$parm] ?? $parm;


            foreach($operators as $operator){
                
                if(isset($query[$operator])){
                    if($operator == 'like' || $operator == 'ilike'){
                        $query[$operator] = "%{$query[$operator]}%";
                    }
                    $paramArray[] = [ $column, $this->operatorMap[$operator], $query[$operator] ];
                }
            }

            
        }
        return $paramArray;
    }

}