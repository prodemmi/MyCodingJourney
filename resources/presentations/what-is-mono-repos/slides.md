---
src: ./pages/multiple-entries.md
---

# Monorepo Tools
- [Rush Js](https://rushjs.io/) by Microsoft.
  - Designed for JavaScript Projects.
  - Move all dependencies to a single place.
  - Easy to build, test and deploy.
- [Bazel](https://bazel.build/) by Google.
  - Support multiple languages such as Java, C++ or python.
  - Widely uses for ML since TensorFlow.
  - Uses Starlark language to manage configuration and settings .
- [Lerna Js](https://lerna.js.org/)
  - Designed for JavaScript Projects.
  - Integrated with Babel.
- [Buck](https://buck.build/) by Facebook.
  - Faster builds.
  - Commonly used for Android and IOS development.
- Yarn or pnpm
  - Uses workspace protocol.
  - Uses rush or changesets tools for handle versioning when project grows.

---
---

# Lerna
Lerna is a tool that optimizes the workflow around managing multi-package repositories with GIT and NPM.

## Features
- Version - Automatically increment versions of packages, generate changelog information, create Github releases etc.
- Publish - Automatically create tags and publish packages to package registries, such as npm

# Nx
## Features
- Run only tasks affected by a code change
- Run prerequisite tasks first
- Cache task results locally
- Visualize the project graph
- Nx Console - Visual Studio Code plugin

---
---

# Lerna commands
```sh
npx lerna run build
```

### Terminal Output
✔  header:build (501ms)

✔  footer:build (503ms)

✔  remixapp:build (670ms)

### Multiple command run

```sh
npx ler
na run test,build,lint
```

### Run command for a package
```sh
npx lerna run test --scope=header
```

---
background: './assets/tools.webp'
---

# Challenges
### Tools
