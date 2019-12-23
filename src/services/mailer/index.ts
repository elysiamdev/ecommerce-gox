import nodemailer from 'nodemailer'
import templateProvider from './templateParser'
require('dotenv').config();
let settings = process.env

class Mailer {

    private targetEmail: string;
    private emailOptions: any;
    private password: string;
    private subject: any;
    private emailType: string;

    constructor(targetEmail: string, emailOptions: any, emailType: string) {
        // emailOptions is an Obj.prototype = {link: 'string', imageUrl: 'string', title: 'string'}
        this.targetEmail = targetEmail
        this.emailOptions = emailOptions;
        this.password = emailOptions.password ? emailOptions.password : null;
        this.subject = emailOptions.subject;
        this.emailType = emailType ? emailType : ''
    }
    async templateParser() {
        let htmlEmail: any = ''
        if (!this.emailType) {
            htmlEmail = await templateProvider(this.emailOptions)
        } else {
            htmlEmail = `<table><tr><td><strong> A senha que você cadastrou é: </strong></td><td> <i> ${this.password}</i> </td></tr></table>`
        }
        return htmlEmail;
    }
    async mailOptionsProvider() {
        return {
            from: settings.GMAIL_USER,
            to: 'campanha',
            bcc: this.targetEmail,
            subject: this.subject,
            html: await this.templateParser()
        }
    }
    transporterProvider() {
        return nodemailer.createTransport({
            service: 'gmail',
            auth: {
                user: settings.GMAIL_USER,
                pass: settings.GMAIL_PASS
            }
        })
    }
    async sendEmail() {

        let mailOptions = await this.mailOptionsProvider()
        let transporter = this.transporterProvider()

        return new Promise((resolve, reject) => {
            transporter.sendMail(mailOptions, (err, data) => {
                if (err) {
                    console.log(err)
                    reject(err)
                } else {
                    return resolve(data);
                }
            })
        })
    }
}

export default Mailer