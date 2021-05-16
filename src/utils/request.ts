import router from '@/router'
import axios, { AxiosRequestConfig, AxiosResponse, AxiosError } from 'axios'
import { ElMessage } from 'element-plus'

class Request {
  protected baseURL: any = import.meta.env.VITE_APP_BASE_API

  protected axiosRequestConfig: AxiosRequestConfig = {}

  protected service: any = axios

  private static instance: Request

  constructor() {
    this.requestConfig()
    this.service = axios.create(this.axiosRequestConfig)
    this.interceptorsRequest()
    this.interceptorsResponse()
  }

  public static getInstance(): Request {
    // If `instance` is an instance, it will be returned directly.
    // If not, it will be returned after instantiation
    this.instance = this.instance || new Request()
    return this.instance
  }

  protected requestConfig() {
    this.axiosRequestConfig = {
      baseURL: this.baseURL,
      timeout: 10000
    }
  }

  protected interceptorsRequest() {
    this.service.interceptors.request.use(
      (config: any) => {
        // set token
        config.headers.Authorization = this.getToken()

        return config
      },
      (error: any) => {
        return Promise.reject(error)
      }
    )
  }

  protected interceptorsResponse(): void {
    this.service.interceptors.response.use(
      (response: any) => {
        this.responseLog(response)
        return response
      },
      (error: any) => {
        const { response } = error
        switch (response.status) {
          case 401:
            ElMessage.warning('先登录一下吧。')
            router.push({ name: 'Login' })
            break
          case 404:
            ElMessage.error('没找到你想要的东西！')
            break
          case 422:
            ElMessage.warning('参数错误了，让我来提醒你一下！')
            break
          default:
            ElMessage.error('发生了什么？过段时间再来提交错误吧')
            break
        }
        return Promise.reject(error)
      }
    )
  }

  protected getToken() {
    return 'Hello World'
  }

  protected responseLog(response: any): void {
    if (import.meta.env.MODE === 'development') {
      const red = Math.round(Math.random() * 255)
      const green = Math.round(Math.random() * 255)
      const blue = Math.round(Math.random() * 255)
      const randomColor = `rgb(${red}, ${green}, ${blue})`
      console.log(
        '%c┍------------------------------------------------------------------┑',
        `color:${randomColor};`
      )
      console.log('| 请求地址：', response.config.url)
      console.log('| 请求参数：', response.config.data)
      console.log('| 返回数据：', response.data)
      console.log(
        '%c┕------------------------------------------------------------------┙',
        `color:${randomColor};`
      )
    }
  }

  public async get(url: string, params: any = {}, config: object = {}) {
    const result = await this.service.get(url, params, config)
    return result
  }

  public async post(url: string, params: any = {}, config: object = {}) {
    const result = await this.service.post(url, params, config)
    return result
  }

  public async put(url: string, params: any = {}, config: object = {}) {
    const result = await this.service.put(url, params, config)
    return result
  }

  public async delete(url: string, config: object = {}) {
    const result = this.service.delete(url, config)
    return result
  }
}

export default Request.getInstance()
