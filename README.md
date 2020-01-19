# lnmp 开发环境搭建

## php composer 
```bash
# 开启compsoer服务
docker run --mount type=bind,source="D:\work\docker\lnmp\laravel",target="/app/laravel" -it composer /bin/bash 

# 使用国内composer镜像
composer config -g repo.packagist composer https://packagist.phpcomposer.com

# 新建composer
composer create-project --prefer-dist laravel/laravel laravel
```