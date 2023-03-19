#!/bin/bash

DB="central"
DATE=$(date +%Y-%m-%d)
DIR=$(dirname "$0")

function hooks
{
	rm .git/hooks -R
	ln -s ../.githooks .git/hooks
}

function composer
{
	docker-compose exec web composer --working-dir=/src "$@"
}

function artisan
{
	docker-compose exec web /src/artisan "$@"
}

function bash
{
	docker-compose exec web bash
}

function build
{
	docker-compose build "$@"
}

function dump
{
	/usr/local/bin/docker-compose -f $DIR/docker-compose.yml exec -T db pg_dump -h localhost -U postgres -F c -b -f /backup/$DB-$DATE.backup $DB
}

function restore
{
	docker-compose exec db pg_restore -h localhost -U postgres -d $DB -c -v /backup/"$@"
}

"$@"
