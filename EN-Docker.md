# Docker EN

## Docker Build
**Docker Image Build :**
```docker build . ``` <br />

**Docker Give Name to Image Build :**
```docker build . -t (name) ``` <br />

## Docker General

**Docker Image List :**
```docker images ``` <br />

**Docker Container List :**
```docker ps ``` <br />

**Docker Container List All :**
```docker ps -a ``` <br />

**Docker Pull Image :**
```docker pull (image) (Example : docker pull ubuntu)``` <br />

**Docker Run Image :**
```docker run (image) (Example : docker run ubuntu)``` <br />

**Docker Ubuntu Bash Access :**
```docker run -it ubuntu ``` <br />

**Docker Start/Stop **
```docker start (image_name) / docker run --name (name) (image) / docker stop (container_name/container_id) ``` <br />

**Docker Accessing Containers Outside (Setting Port) :**
```docker run -p Outer_Port:Inner_Port mongo (Example : docker run -p 27017:27017 mongo) ``` <br />

**Docker Delete Image/Container :**
```docker rm (image/container_name/container_id)  ``` <br />

**Docker Delete All Containers (Inactive Containers) :**
```docker rm $(docker container ls -aq) ``` <br />

**Docker Delete None Images :**
```docker rmi $(docker images -f “dangling=true” -q) ``` <br />

**Docker Running an Image in the Background:**
```docker run -d (image_name) ``` <br />

**Docker Activating Background Container :**
```docker attach (container_name/container_id) ``` <br />

**Docker Access Container Log :**
```docker container logs (container_name/container_id) ``` <br />

**Docker Create Volume :**
```docker run -v Our_Folder:Folder_in_Container mongo (Example : docker run -v /opt/data:/data/db mongo) ``` <br />

## Docker MySQL

**Docker MySQL Access :**
```docker exec -it _container_name_ bash ``` <br />
**MySQL Bash Login :**
```mysql -uroot -ppassword```
