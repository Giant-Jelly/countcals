Countcals
==========

###Endpoints

| Endpoint | Response | Params | Method |
| -------- | -------- | ------ | ------ |
| /auth 
| ```{
    token: (string)<token>
}```
| username, password 
| GET |


| /account 
| [Object] , Username, Daily Calories 
| 
| GET |


| /entries 
| [Array] , food entries per date 
| date 
| GET |


| /entries/new 
| [Object], [Integer] user id, food 
| foodId, timestamp 
| POST |


| /entries/{id} 
| [Object] , Entry from id 
| 
| GET |


| /entries/{id} 
| [Integer] , Entry id 
| 
| DELETE |

| /entries/{id} 
| [Object] , Entry from id 
| 
| PUT |

