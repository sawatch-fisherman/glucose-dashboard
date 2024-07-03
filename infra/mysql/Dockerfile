FROM mysql/mysql-server:8.0

ENV MYSQL_DATABASE=laravel \
  MYSQL_USER=phper \
  MYSQL_PASSWORD=secret631 \
  MYSQL_ROOT_PASSWORD=secret631 \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/my.cnf
RUN chmod 644 /etc/my.cnf
