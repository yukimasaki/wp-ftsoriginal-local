import { defineConfig, loadEnv } from "vite";
import { resolve, relative, extname } from "path";
import { globSync } from "glob";
import { fileURLToPath } from "node:url";

const root = resolve(__dirname, "src");

// WordPress用ビルドのinput設定。WordPress用にはhtmlファイルは不要なため、scssとtsのみをビルド対象にする
const inputsForWordPress = {
  // 動的にファイルを取得する @see https://rollupjs.org/configuration-options/#input
  ...Object.fromEntries(
    globSync("src/css/*.scss").map((file) => [
      relative("src/css", file.slice(0, file.length - extname(file).length)),
      fileURLToPath(new URL(file, import.meta.url)),
    ])
  ),
  ...Object.fromEntries(
    globSync("src/js/*.ts").map((file) => [
      relative("src/js", file.slice(0, file.length - extname(file).length)),
      fileURLToPath(new URL(file, import.meta.url)),
    ])
  ),
};

export default ({ mode }) => {
  process.env = { ...process.env, ...loadEnv(mode, process.cwd()) };

  return defineConfig({
    root,
    base: "./",
    build: {
      outDir: resolve(__dirname, "dist/assets/"),
      rollupOptions: {
        input: inputsForWordPress,
        output: {
          entryFileNames: "js/[name].js",
          chunkFileNames: "js/[name].js",
          assetFileNames: (assetsInfo) => {
            if (assetsInfo.name?.endsWith(".css")) {
              return "css/[name].[ext]";
            } else {
              return "js/[name].[ext]";
            }
          },
        },
      },
    },
  });
};
