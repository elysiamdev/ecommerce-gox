module.exports = (w) => ({
    autoDetect: true,
    tests: [
        'tests/unit/**/*.test.ts'
    ],
    workers: {
      initial: 1,
      regular: 1,
      restart: true
    },
    env: {
      type: 'node'
    }
 });