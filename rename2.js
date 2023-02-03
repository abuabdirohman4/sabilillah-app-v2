const { readdir } = require("fs/promises");
const path = require("path");

const findByExtension = async (dir, ext) => {
    const matchedFiles = [];

    const files = await readdir(dir);

    for (const file of files) {
        // Method 1:
        const fileExt = path.extname(file);

        if (fileExt === `.${ext}`) {
            matchedFiles.push(file);
        }
    }

    return matchedFiles;
};

findByExtension("./public/build/assets", "js").then((files) => {
    console.log(files);
});

const name = "Jesse";
const age = 40;

// export { name, age };
