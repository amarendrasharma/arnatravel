import PackagesApi from "./packagesApi";
const repositories = {
    packages: PackagesApi,
    test: "test"
};
export const RepositoryFactory = {
    get: name => repositories[name]
};
