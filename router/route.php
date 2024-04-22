<?php 

class Route {
    public function warning($code = 404) {
        http_response_code($code);
        require "{$code}.php";
        die();
    }

    public function getSlug($routes, $request){
        $subUrl = explode("/", $request);
        foreach($routes as $index => $value){
            $indexArray = explode('/', $index);
            if(count($subUrl) >= count($indexArray)){
                foreach($indexArray as $id => $val){
                    if($subUrl[$id] == $val){
                        $subUrl[$id] = '';
                    }
                }
            }else {
                $slug = "";
                return $slug;
            }
        }
        $slug = implode("", $subUrl);
        return $slug;
    }
}

