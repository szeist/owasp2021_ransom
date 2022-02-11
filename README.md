## Excercise

1. Unzip the `my-data.txt.ransomed`
2. Implement the decrypt logic
3. Run decrypt program

### Run with docker

```sh
docker run --rm -v $PWD:/app -w /app php:8 php decrypt.php my-data.txt.ransomed
```