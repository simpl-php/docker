# LAMP Development Environment with Docker

This repository provides a Docker-based development environment for php applications. It includes PHP 7.4 - 8.2, Apache, MariaDB, Redis, MailHog, Composer and NPM.

## Prerequisites

- Docker (<https://www.docker.com/>)
- Docker Compose (<https://docs.docker.com/compose/install/>)

## Setup

1. Clone this repository or copy its contents to your project's root directory.
2. Run `docker-compose up -d` to start the containers in detached mode.
3. Access your application at <https://localhost:8082>.

## Services

- **Web**: Apache web server with PHP (versions 7.4 - 8.2)
- **MariaDB**: Database server
- **Redis**: In-memory data store
- **MailHog**: Email testing tool

## Useful URLs

- PHP 7.4 application: <https://localhost:8074>
- PHP 8.0 application: <https://localhost:8080>
- PHP 8.1 application: <https://localhost:8081>
- PHP 8.2 application: <https://localhost:8082>
- MailHog web interface: <http://localhost:8025>

## Useful Commands

Login to the container's console.
```bash
docker-compose exec php82 bash
```

Connect to the `app` database from the container's console.
```bash
mysql -u root -proot -h mariadb app
```

Connect to the database from container's bash without first logging into the container's console.
```bash
docker-compose exec php82 mysql -u root -proot -h mariadb app
```

## Log Files

The log files for each service are located in the following paths within the corresponding container:

- **PHP**: `/var/log/apache2/phperror.log`
- **Apache**: `/var/log/apache2/error.log` and `/var/log/apache2/access.log`
- **MariaDB**: `/var/lib/mysql/{hostname}.err`
- **Redis**: `/var/log/redis/redis-server.log`
- **MailHog**: No log files by default, but logs are visible in the output of `docker-compose logs mailhog`.

You can access the logs using the `docker-compose logs` command or by connecting to the container using `docker-compose exec`.

## Debugging Tips

1. To view the logs of a specific service, run `docker-compose logs {service_name}`. For example, `docker-compose logs php82` to view the Apache logs on the PHP 8.2 container.
2. To access a container's shell, run `docker-compose exec {service_name} bash`. For example, `docker-compose exec php82 bash` to access the Apache/PHP 8.2 container.
3. To restart a specific service, run `docker-compose restart {service_name}`. For example, `docker-compose restart php82` to restart the Apache/PHP 8.2 service.

## Stopping and Removing Containers

To stop the containers, run `docker-compose down`. This command will also remove the containers and any associated networks. However, it will not delete the volumes specified in the `docker-compose.yml` file.

## License

This project is open source and available under the MIT License.
