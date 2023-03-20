# Happy Healthy Plus Web App
 เป็นเว็บไซต์ที่ช่วยในการคำนวณค่า bmi หรือค่าดัชนีมวลกาย <br>
 โดยใช้ 
 * php เป็น backend <br>
 * nginx เป็น web server หลัก <br>
 * mysql, phpmyadmin เป็น database <br>
 
 ## สมาชิก
 * นางสาวศิรินภา ไชยสิทธ์ รหัส 623040634-3
 * นางสาวอลิศา ฉัตรชูเกียรติกุล รหัส 623040660-2
 * นางสาวเอมมิกา กางกรณ์ รหัส 623040665-2
 
 ## Project นี้จัดทำขึ้นเพื่อ เรียนรู้การใช้งาน docker
 
``` java 
.
|__ docker-compose.yml
|__ html/
|   |__ index.php
|__ nginx
|  |__ conf/
|  |  |__ nginx.conf
|  |__ conf.d/
|     |__ default.conf
|__ mariadb/
|  |__ data/
|  |__ initdb/
|  |  |__ tinanic.sql
|  |__ backup/
|__ php/
   |__ Dockerfile
```   

## รัน Container ด้วย docker-compose 
``` java
docker-compose up -d
```


## ดู Containers ที่รันทั้งหมด ตามที่ docker-compose.yml ดูแล
``` java
docker-compose ps
```
![image](https://user-images.githubusercontent.com/58929525/226284416-3999f8d0-c7f3-4362-952d-6bcc7758f702.png)
 หรือ 
 ``` java
docker container ls
```
![image](https://user-images.githubusercontent.com/58929525/226287573-86eed780-c8cf-4388-9b48-dde4b78a35f9.png)

load Happy-Healthy-Plus-Web-App  http://localhost:8000/ in your browser.
![image](https://user-images.githubusercontent.com/58929525/225968624-386991a1-ef50-43ee-977b-79e8827f53b4.png)

load phpmyadmin load http://localhost:8080/

## ตรวจสอบ network
*  
``` java
docker network ls
```
![image](https://user-images.githubusercontent.com/58929525/226287772-f4fe66ba-3943-48d0-b411-22ffea7257b2.png)

* หากต้องการตรวจสอบว่า container ที่เรา run เชื่อมกับ container ของ database ได้หรือไม่ให้เรา exec เข้าไปใน container phpfpm เพื่อ ping container db ซึ่งเราจั้งชื่อว่า web_php เราตั้งชื่อ services ว่า db

``` java
docker exec -it phpfpm sh
```

เมื่อเข้าไปใน container แล้วสามารถ ping db ได้
``` java
ping db
```
![image](https://user-images.githubusercontent.com/58929525/226285675-f03fd4d3-5c2e-4cff-ac4a-fd6456254dc0.png)



## Shutdown
``` java
docker-compose down
```
![image](https://user-images.githubusercontent.com/58929525/226288830-835aa388-455d-4ee0-b325-29ec201420c7.png)


## Stop/Delete Container ที่ docker-compose.yml ดูแล และลบ image ทั้งหมดด้วย
ด้วยคำสั่ง 
``` java
docker-compose down --rmi all
```
