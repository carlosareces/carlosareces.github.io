find . -name "*.php" -exec git 's/\.php$/.html/' '{}' \;
git add --all

find ./ -name "*.html" -type f -exec sed -i 's/.php/.html/g' {} \;



