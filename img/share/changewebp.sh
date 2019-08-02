for pngFile in *.png
do
    echo "start converting "$pngFile
    base=`basename $pngFile .png`
    cwebp $pngFile -o $base".png.webp" >/dev/null 2>&1
    echo "complete"
done
