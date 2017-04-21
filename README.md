Countcals
==========

###Endpoints

| Enpoint       | Response                           | Params | Method |
|---------------|------------------------------------|--------|--------|
| /auth         | `{\   token: (string)<token>\ }` |        |        |
| /account      |                                    |        |        |
| /entries      |                                    |        |        |
| /entries/new  |                                    |        |        |
| /entries/{id} |                                    |        |        |
| /entries/{id} |                                    |        |        |
| /entries/{id} |                                    |        |        |
|               |                                    |        |        |
|               |                                    |        |        |
|               |                                    |        |        |
|               |                                    |        |        |
|               |                                    |        |        |
|               |                                    |        |        |
|               |                                    |        |        |

| Endpoint | Response                                 | Params                                | Method |
| -------- | --------                                 | ------                                | ------ |
| /auth    | `{ `                                     | username, password                    | GET    |
|          |    `token: (string)<token>`              |
|          | `}`



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

