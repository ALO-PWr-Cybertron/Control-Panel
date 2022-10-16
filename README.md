# Control-Panel

## Build

```
docker build . -t control-panel --build-arg flag=`cat flag.txt` --build-arg user_password=user --build-arg admin_password=admin
```
