    <?php
   
    $json = '[
        {
             "name":"Shanhaiguan Airport",
             "iata_code": "y",
             "country": "CN",
             "State": "Qinhuangdao",
             "Country": "CN-13" 
        }, 
        {       
             "name":"Shijiazhuang Daguocun International Airport",
             "iata_code": "SJW",
              "country": "CN",
             "State": "Shijiazhuang",
             "Country": "CN-13"
        },
            
            {
                "name":"Tianjin Binhai International Airport",
                "iata_code": "TSN",
                "country": "CN",
                "State": "Tianjin",
                "Country": "CN-12"
            },
            {
                "name":"Tongliao Airport",
                "iata_code": "TGO",
                "country": "CN",
                "State": "Tongliao",
                "Country": "CN-15"
            },
            
            {
                    "name":"Wuhai Airport",
                "iata_code": "WUA",
                "country": "CN",
                "State": "Wuhai",
                "Country": "CN-15"
            },
            
            {
                "name":"Ulanhot Airport",
                "iata_code": "HLH",
                "country": "CN",
                "State": "Ulanhot",
                "Country": "CN-15"
            },
            
            {
                "name":"Xilinhot Airport",
                "iata_code": "XIL",
                "country": "CN",
                "State": "Xilinhot",
                "Country": "CN-15"
            },
            
            {  
                "name":"Xingtai Dalian Airport",
                "iata_code": "XNT",
                "country": "CN",
                "State": "Xingtai",
                "Country": "CN-13"
            },
            {
                "name": "Xinzhou Wutaishan Airport",
                "iata_code": "WUT",
                "country": "CN",
                "State": "Xinzhou",
                "Country": "CN-14"
            },
            { 
                "name":"Yuncheng Guangong Airport",
                "iata_code": "YCU",
                "country": "CN",
                "State": "Yuncheng",
                "Country": "CN-61"
            },    
            {
                "name": "Taiyuan Wusu Airport",
                "iata_code": "TYN",
                "country": "CN",
                "State": "Taiyuan",
                "Country": "CN-14"
            }
            ]';
            $book = json_decode($json, true);
            
            function sortAlphabetically($a, $b){
                return strcmp($a['name'], $b['name']);
              }
            usort($book, 'sortAlphabetically');
            foreach ($book as $key ) {
                echo '<br>'.$key['name']. '<br/>';
            }

           
            
            
            
           
              
                
            