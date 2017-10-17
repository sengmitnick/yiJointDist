declare var dd: any;

interface DingtalkModule {
    /**
     * 获取容器版本号
     */
    version: string;
    android: boolean;
    ios: boolean;
    ready(param: () => void): void;
    sdk_version: string;
    ui: any;
    biz: any;
    device: any;
    runtime: any;
    internal: any;
    util: any;
    preRelease: any;
    channel: any;
    service; any;
    config(param: () => void): void;
}
// interface ForEachCallback {
//     (keyId: any, status: MediaKeyStatus): void;
// }