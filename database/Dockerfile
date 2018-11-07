# MySQL Database Dockerfile 
# 
# 
# Need Build with the latest sql file provided, it is expected that there will be a mounted volume at /host/sqlSource that 
# contains one or more sql files with the following naming convention:
# 		
# 			{projectname}.v{number}_{date}.sql
# 
# example:
# 			culture.recruitment.v1_2018-04-22.sql
# 
# The latest dated sqlfile will be used to set up the database during the docker image build

FROM mysql:5.7

ENV DBNAME wordpress
# ENV MYSQL_DATABASE wordpress
ENV MYSQL_ROOT_PASSWORD wordpress
ENV MYSQL_USER wordpress
ENV MYSQL_PASSWORD wordpress

# Going to need to copy all of the database dumps in
COPY ./* /home/databaseDumps/

# Need to get the latest sql file and then move it to the /docker-entrypoint-initdb.d direcotry, SQL Scripts in this location are executed as part of initilisation of the database
RUN mv /home/databaseDumps/$(ls /home/databaseDumps | sort -rst '/' -k1,1 | head -n 1) /docker-entrypoint-initdb.d/dbDump.sql 

# Need to appened the creation, selection and permissions granting of the database to the head of the sqlDump
RUN  echo "CREATE DATABASE $DBNAME; USE $DBNAME; GRANT ALL PRIVILEGES ON $DBNAME.* TO 'wordpress'@'%';" | cat - /docker-entrypoint-initdb.d/dbDump.sql > temp && mv temp /docker-entrypoint-initdb.d/dbDump.sql

