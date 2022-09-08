# Manticoresearch issue 886

Reproduce [issue](https://github.com/manticoresoftware/manticoresearch/issues/886)

## Reproduce
Run docker
```
docker-composer up -d
```

Run query
```
mysql --port 19306 --host 127.0.0.1 < query.sql
```

