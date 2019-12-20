const fs = require('fs')

type TTemplateData = {
    subject: string,
    link: string,
    imageUrl: string
}
interface ITemplateParser {
    (data: TTemplateData): void
}

export const templateParser: ITemplateParser = ({ subject, link, imageUrl }) => new Promise((resolve, reject) => {
    let templatePath = `${__dirname}/templates/index.html`
    fs.readFile(templatePath, 'utf8', function (err: any, contents: any) {
        if (err) {
            return reject('We got an Error rendering the template, please verify the systems logs')
        }
        else {
            let result = contents.replace(/{link}/g, link);
            result = result.replace(/{imgUrl}/g, imageUrl);
            result = result.replace(/{title}/g, subject);
            return resolve(result);
        }
    })
})

export default templateParser;