Требования
- docker
- docker-compose


Установка:

1) после клонирования с git-hub выполнить:

- sudo docker-compose -f "docker/docker-compose.yml" up -d --build
- docker exec -it test-task-k3 /bin/sh -c "[ -e /bin/bash ] && /bin/bash || /bin/sh"
- composer update
- php artisan migrate


Каталоги и файлы проекта:
- app/User.php
- app/Http/Controllers/UserRegistrationLog.php
- docker
- resources/views
- route/web.php

Ссылки:
http://localhost:8096/ - основная ссылка на проект
http://localhost:1080/ - ссылка для подтверждения Email - адресса
