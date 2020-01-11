module.exports = {
    preset: 'ts-jest',
    testEnvironment: 'node',
    moduleNameMapper: {
      "^@models/(.*)": "<rootDir>/src/models/$1",
      "^@database/(.*)": "<rootDir>/src/server/db/$1",
      "^@providers/(.*)": "<rootDir>/src/providers/$1",
      "^@services/(.*)": "<rootDir>/src/services/$1",
      "^@logic/(.*)": "<rootDir>/src/logic/$1",
    }
  };