#!/bin/bash

# Add a version file to the "deployment".
echo "Deployed: $(date)
$(git log -1 --pretty=format:'%s (%ci)' --abbrev-commit)

https://github.com/naxoc/xoc-dk-jekyll-blog/commit/$(git rev-parse HEAD)" > _site/VERSION.txt

# "almond" is set up in my .ssh/config.
cp -r older _site/
rsync -avz --delete _site/ almond:/var/www/xoc.dk
if [ $? -ne 0 ]; then echo "Could not publish the site"; exit 1; fi

rm _site/older
# Remove the local "deployment" file.
rm _site/VERSION.txt